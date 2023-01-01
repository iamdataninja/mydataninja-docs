---
sidebar_position: 2
---

# Throwing Custom Events

## Throwing An Events

You can throw custom events on your own, depending on user behavior. For example if user submits a lead form, you can throw an event called `lead` and submit form inputs as well

```js title="Example lead event"
ninja.event('lead', {
  value: 15,
  name: 'Some Name',
  lastname: 'Lastname',
});
```

Where the firs argument is event name and second argument is additional data for that event.
**second argument is not required**

## Saving Event ID

The above example returns the promise which contains data about that event.
In order to get `event_id` from response you can use following syntax

```js title="Save event id"
ninja
  .event('lead', {
    value: 15,
    name: 'Some Name',
    lastname: 'Lastname',
  })
  .then((e) => {
    saveEventId(e.id);
  });
```
