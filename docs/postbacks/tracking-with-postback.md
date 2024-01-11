---
menu-position: 2
---

# Tracking With Postbacks

## Getting Postback Tracking Parameter

Lets assume that you have some affiliate or any third party url where you want to pass tracking parameter, for example: `https://example.com/some-product?subid={subid}`

In this case you have to pass any `MyDataNinja` tracking parameter in subid to receive it back when some conversion or event occurs.

As mentioned [Above](/docs/postbacks/receiving-postback) you can track with these parameters:

- user_id - **Unique visitor id `njuser`**
- event_id - **Event id generated from snippet**

So, all you have to do is to make user click the url with above parameters:

In our example tracking code will be the following:

```html
<a href="https://example.com/some-product?subid={subid}" onclick="trackurl(event)"
  >Order Product
</a>
```

```javascript
<script>
  function trackurl(event) {
    event.preventDefault();
    const eventID = nj.getLastEventId();
    const href = event.target.getAttribute('href');
    const trackedUrl = href.replace('{subid}', eventID);
    event.target.setAttribute(trackedUrl);

    event.target.click();
  }
</script>
```

The above script will replce `{subid}` placeholder with MyDataNinja `event_id` and then redirects to it.

:::info
The above Javascript snippet is may not work for your requirements
:::
