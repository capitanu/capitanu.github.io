SELECT FIRST_NAME, LAST_NAME, JOB_ID, departments.DEPARTMENT_ID, departments.DEPARTMENT_NAME
FROM employees
INNER JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID
INNER JOIN locations ON locations.LOCATION_ID = departments.LOCATION_ID
WHERE locations.CITY = "London"
