Using google maps API, the program will display the shortest path betwenn 7 given locations. Language - JavaScript.

For shortest.html :
On clicking submit button program will find the shortest route from origin: Mellon Labs, Chennai and cover:
a) Guru Nanak College, Chennai
b) Gandhi Nagar Club, Chennai
c) TICEL Biotech park, Chennai
d) THe B Bar, Chennai
e) Advantix Technologies, Chennai
f) Chemplast Cricket Ground, Chennai

How it works:
Google maps api provides a method to "optimizeWaypoints" but it is necessary to provide end point and start point to it. But in the given problem statement only origin is fixed, end point can be any of the 6 given points. So we need to find end point among above given 6 points so that route is minimum. Using google maps api "DistanceMatrixService()" we can calculate distance from origin to each of the above 6 points. Point which is at maximum distance from the origin will become our end point. Remaining all points will become waypoints, passing start point, end point and waypoints to DirestionsService with optimizeWaypoints set to "true" will give the least distance between origin and all 6 points.

Limitations:
optimizeWaypoint feature works only when number of waypoints are less than 8. So if the number of waypoints are more than 8 in above problem then we can use Dijkstra's algorithm.


References:
https://developers.google.com/maps/documentation/javascript/
