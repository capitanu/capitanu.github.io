SELECT departments.DEPARTMENT_ID, departments.DEPARTMENT_NAME, employees.FIRST_NAME
FROM departments
INNER JOIN employees ON employees.EMPLOYEE_ID = departments.MANAGER_ID
