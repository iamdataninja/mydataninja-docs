---
sidebar_position: 0
---

# Create JS Snippet

---

## How To Create New JS Snippet?

For every website you have, you have to create different snippets and tell your Workspace that you own that website.

In order to create js snippet, first you have to navigate to **Websites** Module in your workspace and follow instructions to attach new website.

After you fill up form, then there will be presented js snipped which you have to insert in that webpage which you have just connected.

```js title="The JS snippet code usually looks like this:"
<script type="text/javascript" data-website="<WEBSITE_ID>" src="https://static.mydataninja.com/ninja.js" async defer></script>
<script type="text/javascript">
  var nj = window.nj || [];
  nj.push(['init', {}]);
</script>
```

:::caution
Do **not** copy js snippet from here, every website has its unique key
:::

---

## Inserting JS Snippet

Copy that snippet and paste it in your website. Snippet works better if it is inserted in the `head` section and every page where incomming user can visit

:::warning
Do **not** remove or change the code of snippet, unless you know what you are doing
:::

## How To Check If Snippet Correctly Integrated

After you have everything completed, just press **Test Connection** Button and wait for the check to be done.

It will open the webpage you have just connected and you have to wait for that page to load.

After about 3-5 seconds you can close that tab and check if testing is done.

If everything is good, you will be presented success message, otherwise please carefully follow docs above and try to integrate and test again.
