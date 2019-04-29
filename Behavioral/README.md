# PHP7 Design Patterns

**Behavioral design patterns** provide several mechanisms for interaction and responsibility of objects.

## Behavioral

* [ChainOfResponsibility](ChainOfResponsibility)
passes request trough a chain of handlers. Each handler decides to process the request or to pass it to the next handler.

* [Command](Command)
converts a request to a separate object that contains all information about the request. It's useful for queueing tasks and tracking the history of executed tasks.

* [Iterator](Iterator)
lets you go over elements of different collections, no matter what their type is (list, stack, tree, etc.)

* [Mediator](Mediator)
reduces the chaotic communication between objects and forces them to communicate indirectly, through the Mediator object. It expands the idea of the Observer pattern.

* [Memento](Memento)
stores the state of an object and allows you to restore it at any time in the future.

* [Observer](Observer)
allows us to notifiy all subscribed objects about any events that happen to the object they are observing.

* [State](State)
allows an object to change its behavior when its internal state changes.

* [Strategy](Strategy)
encapsulates the algorithms and uses delegation to handle requests.

* [TemplateMethod](TemplateMethod)
defines the main structure of an algorithm and allows subclasses to override specific steps.

* [Visitor](Visitor)
allows adding new behaviors to existing class hierarchy without altering any existing code.
