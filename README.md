# Forkel Resources
Forkel Resources is a collection of examples how to create new tables and how to work with existing collections.

## Installation
1. Pull the code.
2. Copy the code to your document root directory where the `/app/` folder is located.
3. After installation you should see a new menu item ` Forkel > Resources ` in the admin panel.
4. You should find a record " forkel_resources_setup " in table " core_resource ". Use `select * from core_resource where code = 'forkel_resources_setup';`

## Features
* Grid with new resource ( Green, Blue ).
* Grid with data from `customer/customer_collection`.

## Usage
The functionality can be used in the backend section `Forkel > Resources`.

## Support
If you have any issues with this extension, open an issue on [Github](https://github.com/tobias-forkel/Forkel_Resources/issues)

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Submit a pull request. :)

## History
===== 0.0.1 =====

* Initial version of this module

## License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
