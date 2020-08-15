SELECT FIRST_NAME, LAST_NAME, departments.DEPARTMENT_ID, departments.DEPARTMENT_NAME
FROM employees
INNER JOIN departments ON departments.DEPARTMENT_ID = employees.DEPARTMENT_ID
