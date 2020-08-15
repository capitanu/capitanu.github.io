SELECT employees.EMPLOYEE_ID, jobs.JOB_ID, DATEDIFF(job_history.END_DATE , job_history.START_DATE) AS "TIME_WORKED"
FROM job_history
INNER JOIN jobs ON jobs.JOB_ID = job_history.JOB_ID
INNER JOIN employees ON employees.EMPLOYEE_ID = job_history.EMPLOYEE_ID
