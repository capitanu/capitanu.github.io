SELECT DEPARTMENT_NAME, locations.LOCATION_ID, locations.STREET_ADDRESS, locations.POSTAL_CODE, locations.CITY, locations.STATE_PROVINCE, countries.COUNTRY_NAME
FROM departments
INNER JOIN locations ON locations.LOCATION_ID = departments.LOCATION_ID
INNER JOIN countries ON countries.COUNTRY_ID = locations.COUNTRY_ID
