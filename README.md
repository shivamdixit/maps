Using google maps API, the program will display the shortest path betwenn 7 given locations. Language - JavaScript and PHP(in progress).

For shortest.html :
On clicking submit button program will find the shortest route from origin: Mellon Labs, Chennai and cover:
a) Guru Nanak College, Chennai
b) Gandhi Nagar Club, Chennai
c) TICEL Biotech park, Chennai
d) THe B Bar, Chennai
e) Advantix Technologies, Chennai
f) Chemplast Cricket Ground, Chennai

How it works:
Google maps api provides a method to "optimizeWaypoints", but it is necessary to provide end point and start point to it. But in the given problem statement only origin is fixed, end point can be any of the 6 given points. So we need to find end point among above given 6 points so that route is minimum. Using google maps api "DistanceMatrixService()" we can calculate distance from origin to each of the above 6 points. Point which is at maximum distance from the origin will become our end point. Remaining all points will become waypoints, passing start point, end point and waypoints to DirestionsService with optimizeWaypoints set to "true" will give the least distance between origin and all 6 points.

Other Possible Methods:
One more way it can be done is : one by one make each of the 6 points "end points" and remaining 5 waypoints, passing it to DirectionsService and then calculate totalDistance in each of the possibilites and store them in an array. Then find the least among all the array elements of totalDistance and show route corresponding to that least value element.

Problems: According to documentation:
"Accessing the Directions service is asynchronous, since the Google Maps API needs to make a call to an external server".
Since the Directions service is asynchronous, we cannot access the array of totalDistances until request is complete. So it becomes very difficult to keep track of all the totalDistances within loop.

Limitations:
optimizeWaypoint feature works only when number of waypoints are less than 8. So if the number of waypoints are more than 8 in above problem then we can use Dijkstra's algorithm to find the shortest possible path (Travelling Salesman Problem).