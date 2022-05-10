 
## White Box Testing using php laravel 

this system have 3 application to simulate White Box Testing using php laravel

1.	Replace sequences of blank characters with a single blank character. 
2.	triangle type => The type of triangle is "Isosceles" if all of its sides are equal length, "Equilateral" if only two of its sides are equal length, "Scalene" if all of its sides are different length
3.	Car Reservation application 

## to run this test you can pull this run this command 

    php artisan test --filter BlankCharactersTest
    php artisan test --filter TriangleTypeTest   
    php artisan test --filter  SerachCarTest   
    php artisan test --filter  ReservationCarTest
    
    and you can change the branch to run regression testing
    
     php artisan test --filter BlankCharactersTest
