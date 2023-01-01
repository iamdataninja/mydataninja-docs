---
sidebar_position: 1
---

# Start Tracking

## How Our Tracking Works

If the snippet is loaded on webpage, it will start tracking users immediately

Each incomming user has assigned unique ID called `njuser`

After `njuser` is assigned, snippet will continue tracking actions completed by user called `events`

Each unique event has its unique ID called `event_id`

In order to fully integrate with `MyDataNinja` we recommend you to save `njuser` and `event_id` on your side as well, So you can comminicate with us afterwards.

---

## How To Get Data From Snippet

After snippet is loaded, the global scope variable is created called `nj` , you can use that variable to call some snippet methods.

If you look at the snippet, we call `init` method using following syntax `nj.push(['init', {}]);`. The reason why we use `nj.push` is because if script is not loaded yet, any call on `nj` method will result an error , but using `push` method everything will be called after loading

:::caution
**Always** make sure that the method you are calling on `nj` does exist
:::

## How To Retreive User ID (`njuser`)?

After `njuser` has assigned to current visitor, you can call `nj.getUserId()` to retreive that `njuser`

```js title="For Example"
const njuser = nj.getUserId();
console.log(njuser); // 1234567
```

## How To Retreive Event ID?

After every event tracked by ninja, you can call `nj.getLastEventId()` to get latest event id occured on webpage.

When user snippet is loaded `pageview` event is called by default. If you call `nj.getLastEventId()` without throwing any other event, this will return an ID if that `pageview` event.

```js title="For Example"
const event_id = nj.getUserId();
console.log(event_id); // 1234567
```

:::info
In order to get an `event_id` of event you have fired on your own, please see next section
:::
