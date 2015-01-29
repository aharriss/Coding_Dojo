--Question 1--

SELECT countries.name, languages.language, languages.percentage 
FROM languages
JOIN countries ON countries.id = languages.country_id
WHERE languages.language = 'Slovene' ORDER BY percentage DESC;

--Question 2--

SELECT countries.name, COUNT(cities.name) AS n_cities
FROM countries 
JOIN cities ON countries.id = cities.country_id
GROUP BY countries.id
ORDER BY n_cities DESC;

--Question 3--

SELECT countries.name, cities.name, cities.population
FROM cities
JOIN countries ON countries.id = cities.country_id
WHERE countries.name = 'Mexico' AND cities.population > 500000
ORDER BY population DESC;

--Question 4--

SELECT countries.name, languages.language, languages.percentage
FROM languages
JOIN countries ON countries.id = languages.country_id
WHERE languages.percentage>89
ORDER BY percentage DESC;

--Question 5--

SELECT countries.name, countries.surface_area, countries.population 
FROM countries
WHERE surface_area<501 AND population>100000
ORDER BY surface_area DESC;

--Question 6--

SELECT countries.government_form, countries.capital
FROM countries
WHERE capital>200 AND life_expectancy>75;

--Question 7--

SELECT countries.name, cities.name, cities.district, cities.population 
FROM countries
JOIN cities ON countries.id = cities.country_id
WHERE countries.name = 'Argentina' AND cities.district = 'Buenos Aires' AND cities.population > 500000;

--Question 8--

SELECT countries.region, countries.name, COUNT(countries.id)
FROM countries
GROUP BY countries.region
ORDER BY COUNT(countries.id) DESC;
