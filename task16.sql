SELECT DEPARTMENT_ID, SUM(SALARY)/COUNT(DISTINCT EMPLOYEE_ID) as "EMPLOYEE_ID"
FROM employees
GROUP BY DEPARTMENT_ID
HAVING COUNT(DISTINCT EMPLOYEE_ID) > 10
