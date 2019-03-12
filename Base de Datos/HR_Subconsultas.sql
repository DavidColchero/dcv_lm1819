-- Saber el nombre, el trabajo y el salario de los empleados que cobran mas de la media 

SELECT first_name, last_name, salary FROM EMPLOYEES
    WHERE salary > (SELECT AVG(salary) FROM EMPLOYEES);