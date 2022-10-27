---
menu-position: 0
---

# Create Postbacks

## How to Create Postbacks

To Create Postbacks you have to navigate: `Postbacks` module and press `Create Postaback` Button, where you will be presented postback creation form.

After correctly filling that form and submit, you can get postabck url, which usually looks like this

```json title="Example Postback Url"
"https://pb.mydataninja.com/abcdefghijklmnopqrstuvwxyz?transaction_id={transaction_id}&click_id={click_id}&currency={currency}&user_id={user_id}&data1={data1}&event_id={event_id}&value={value}&data1={data1}&data2={data2}&data3={data3}"
```

Each postback url is unique and may has multiple parameters which you can configure in create form.
