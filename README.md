# facemash-alike
rate me is a website like the facemash for rating photos based on elo algorithm.
# author- faiz ahmed quddusi
https://github.com/faizi123

# Facemash

A copy of the facemash that Mark Zuckerberg made in his college days and the one shown in the movie
'The Social Network'.

Demo https://merate616.000webhostapp.com

## How to setup

The images has to be saved in the 'images' folder. 
And the database name should be 'facemash' with the table name 'photos'.
The table 'photos' need to have 4 columns i.e. id, photo(image name), rating(150 for all) & k.



## Method used

The Elo rating system is used in the making of the rating system 
More information at (https://en.wikipedia.org/wiki/Elo_rating_system)

Base rating of 150 is assumed.

K is used as follow:-

**10 for ratings greater than 225.**
**15 for ratings greater than 75 but less than 225.**
**25 for ratings less than 75.**

Note:- K and Base ratings vary all the time. I have thanken them just for the sake of simplification.



## Authors

* **faiz ahmed quddusi -


## Enjoy Coding



