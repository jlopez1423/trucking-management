# Trucking Management README

## TODO:
2. Set up Loads table(further down the line)
3. Download adminlte dash
4. Create Factories
5. Seed database
6. Set-up Relationships
11. Set up phpunit xml for testing

## Relationships:
1. User::belongsTo Role
2. Role::hasMany Users
3. Address::belongsTo City
4. City::hasMany Addresses
5. User::belongsTo Address

