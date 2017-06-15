<?php
namespace AppBundle\Admin;

use AppBundle\Entity\JamType;
use AppBundle\Entity\Year;
use AppBundle\Service\JamJarService;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Validator\Constraints as Assert;

class JamJarAdmin extends AbstractAdmin
{
    /**
     * @var JamJarService
     */
    protected $jamJarService;

    /**
     * @param JamJarService $jamJarService
     */
    public function getJamJarService(JamJarService $jamJarService)
    {
        $this->jamJarService = $jamJarService;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('jamType', 'entity', array(
                'class' => JamType::class,
                'placeholder' => 'Choose a jam'
            ))
            ->add('jamYear', 'entity', array(
                'class' => Year::class,
                'placeholder' => 'Choose an year'
            ))
            ->add('comment', 'textarea', array(
                'required' => false
            ));

        if ($this->isCurrentRoute('create')) {
            $formMapper->add('quantity', 'integer', array(
                'mapped' => false,
                'constraints' => new Assert\Range (['min' => 1]),
                'data' => 1
            ));
        }
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('jamType');
        $datagridMapper->add('jamYear');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('jamType');
        $listMapper->addIdentifier('jamYear');
        $listMapper->addIdentifier('comment');
    }

    /**
     * @param mixed $jamJar
     */
    public function postPersist($jamJar)
    {
        $form = $this->getForm();
        $quantity = $form->get('quantity')->getData();
        $this->jamJarService->saveJamJar($quantity, $jamJar);
    }
}
