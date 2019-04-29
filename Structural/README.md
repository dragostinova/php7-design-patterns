# PHP7 Design Patterns

**Structural design patterns** provide several mechanisms to collect objects into a larger structure, while keeping the structure flexible.

## Structural

* [Adapter](Adapter)
is a wrapper of an object and transforms client requests to format recognizable by the object.

* [Bridge](Bridge)
allows us to seperate related objects into 2 different class hierarchies - abstraction and implementation.

* [Composite](Composite)
treats a group of objects the same way as a single instance of the object. Using the Composite pattern makes sense only when the structure can be represented as a tree.

* [Decorator](Decorator)
adds new behaviors to existing object by placing it into a wrapper, that contains the behaviors.

* [Facade](Facade)
provides a simplified interface to a complex set of classes.

* [Flyweight](Flyweight)
shares as much as possible memory with similar objects instead of keeping all of the data in each object.

* [Proxy](Proxy)
controls access to a certain object, allowing you to perform something either before or after the request to the object.
