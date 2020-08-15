SELECT departments.DEPARTMENT_NAME, employees.FIRST_NAME, employees.LAST_NAME, locations.CITY
FROM departments
INNER JOIN locations ON departments.LOCATION_ID = locations.LOCATION_ID
INNER JOIN employees ON departments.MANAGER_ID = employees.EMPLOYEE_ID
