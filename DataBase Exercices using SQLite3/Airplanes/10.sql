select 
    flight.flightcod, 
    flight.fromairportcod,
    origin_airport.city as origin_city,
    destination_airport.city as destination_city
from 
    flight 
join 
    airport as origin_airport 
    on flight.fromairportcod = 
    origin_airport.airportcod
join
    airport as destination_airport
    on
    flight.toairportcod = destination_airport.airportcod
where
    destination_city = 'Lisboa'
and
    origin_city = 'Porto';