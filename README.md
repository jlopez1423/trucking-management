# Trucking Management README

## TODO:
* Create Factories
* Seed database
* Set-up Relationships
* Set up phpunit xml for testing
* Make sure users default to some role.
* Set up Google Auth
* Configure google oauth

## Relationships:
1. User::belongsTo Role
2. Role::hasMany Users
3. Address::belongsTo City
4. City::hasMany Addresses
5. User::belongsTo Address

### Documentation to adminLTE
https://github.com/acacha/adminlte-laravel

Link to admin-lte social-auth:
https://github.com/acacha/laravel-social