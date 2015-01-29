-- Question 1 --

SELECT billing.amount, billing.charged_datetime
FROM sites
JOIN clients ON sites.client_id = clients.client_id
JOIN billing ON clients.client_id = billing.client_id
GROUP BY billing.charged_datetime
WHERE billing.charged_datetime = 'March' AND billing.charged_datetime = 2012;

-- Question 2 --

SELECT billing.amount, billing.client_id, clients.client_id
FROM sites
JOIN clients ON sites.client_id = clients.client_id
JOIN billing ON clients.client_id = billing.client_id
GROUP BY billing.amount
WHERE billing.client_id = 2;

-- Question 3 --

SELECT site.client_id, clients.sites_site_id
FROM sites
JOIN clients ON sites.client_id = clients.client_id
WHERE clients.client_id = 10;

-- Question 4 --

SELECT sites.site_id, leads.leads_id, leads.site_id, leads.leads_id
FROM sites
JOIN leads ON sites.site_id = leads.site_id
-- GROUP BY month 
WHERE billing.client_id = 1 AND billing.client_id = 20;

-- Question 5 --

SELECT sites.site_id, leads.leads_id, leads.site_id, leads.leads_id
FROM sites
JOIN leads ON sites.site_id = leads.site_id
WHERE leads.registered_datetime > "January 1, 2011" AND leads.registered_datetime < "February 15, 2011";

-- Question 6 --

SELECT sites.client_id, sites.site_id, client.first_name, client.last_name, leads_has_sites.leads_leads_id
FROM sites
JOIN clients ON sites.client_id = clients.client_id
JOIN leads ON sites.site_id = leads.site_id
GROUP BY clients.client_id
WHERE leads.leads_id > "January 1, 2011" AND leads.leads_id < "December 31, 2011"
ORDER BY COUNT(leads.leads_id);

-- Question 7 --

SELECT sites.client_id, sites.site_id, client.first_name, client.last_name, leads.leads_id
FROM sites
JOIN clients ON sites.client_id = clients.client_id
JOIN leads ON sites.site_id = leads.site_id
-- GROUP BY clients.client_id AND month
WHERE leads.leads_id >= "January 1, 2011" AND leads.leads_id < "July 1, 2011"
ORDER BY COUNT(leads.leads_id);

-- Question 8 -- 



-- Question 9 -- 



-- Question 10 -- 

