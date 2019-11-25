select COUNT(*) as num_flights
from flight
where duration = 2 OR duration = 3;