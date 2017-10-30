# Trucking Management README

## TODO:
2. Set up Loads table(further down the line)
4. Create Factories
5. Seed database
6. Set-up Relationships
11. Set up phpunit xml for testing
12. Configure google oauth
13. Make sure users default to some role.

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