/* SQL Test */
/* A */
SELECT * FROM employees e JOIN salary s ON e.salary_id = s.id WHERE s.salary = (SELECT MAX(salary) FROM salary);

/* B */
SELECT * FROM employees WHERE (date_hired BETWEEN '2017-01-01 00:00:00' AND '2018-12-31 23:59:59');

/* B */
SELECT * FROM employees e JOIN departments d ON e.department_id = d.id WHERE e.date_hired > '2018-01:01 00:00:00' AND d.department = 'IT';