 Symfony training at Mall-Connect #2

> _Jam Jar_ is a web application which helps people to track their jam storage.
> When one receives from a granny few jars of strawberry jam – he adds information about them into database. 
> It is possible to write amount of jars, type of jam, year of production and some comment.


### Task 1 // Create data model and fill it with fixtures.


Data model consists of 2 enumerations (jam type, year of production) and JamJar entity. 
Enumerations are simple entities with id + name fields.

JamJar entity fields are:

* jam type(single select)
* year (single select),
* comment (text, optional)

Please, create few values for enumerations and few JamJar instances via Alice fixtures.


### Task 2 // Set up Sonata Admin environment and implement CRUD for enumerations.

### Task 3 // Implement CRUD for JamJar entity.

Service class should have one public method to fetch all data needed for dashboard. 
This method should be covered with Unit test – all external calls from the service are replaced by mocks and service class is only one real object in the test, created via “new” operator.


### Task 4 // Quantity functionality

Add to the form of JamJar __Quantity__ field. This field should be available only on “create” form and should not mapped to entity. 
By default value of field is 1. If during creation of JamJar user changes value to N – then during creation, N instances of JamJar should be created.
It would be nice if this multiplying/copying logic would be stored in a service class and covered with unit test.



## Installation
``` bash
# composer install

# php bin/console doctrine:database:create

# php bin/console doctrine:schema:update --force

# php bin/console server:run
```

## Create Fixtures

``` bash
 php bin/console doctrine:fixtures:load
```

### Resources

* [Symfony Documentation - Entity](https://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_doctrine_entity.html)
* [Symfony Documentation - DoctrineFixturesBundle](https://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html)
* [Alice - Expressive fixtures generator](https://github.com/nelmio/alice/tree/2.x)
* [Sonata Admin Bundle](https://sonata-project.org/bundles/admin/3-x/doc/index.html)
* but specially [my lovely husband](https://github.com/rodrigonbarreto)