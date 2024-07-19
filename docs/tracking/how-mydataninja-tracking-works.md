---
menu-position: 1
title: 'How MyDataNinja Tracking Works'
---

## Introduction

When you connect your website and Ad Accounts to our system, all that left to do is to start tracking and see the results. In this section we'll explain how MyDataNinja tracks users automatically.

### Utm Parameters

UTM parameters (Urchin Tracking Module parameters) are tags added to URLs to help track the performance of marketing campaigns in different tools. By appending specific parameters to a URL, you can understand how users interact with your content and which marketing channels are getting traffic to your website.

There are 5 main UTM paramters which are used as standard worldwide with provided examples:

- utm_source - **`utm_source=google, utm_source=facebook`**
- utm_medium - **`utm_medium=email, utm_medium=cpc`**
- utm_term - **`utm_source=running+shoes, utm_source=laptops+for+sale`**
- utm_campaign - **`utm_campaign=spring_sale, utm_campaign=product_launch`**
- utm_content - **`utm_content=cta_button, utm_content=text_link`**

Of course these parameters can be entered manually, for example:
**`https://example.com?utm_source=google&campaign=christmas+sale`**

But there is better way to tell Advertiser network to fill up the parameter with the actual ad properties from which user came. For example for Google Ads the url can be:
`https://example.com?utm_source=google&campaign={campaignid}&utm_term={keyword}`
when the user click on the ad `{campaignid}` and `{keyword}` will be replaced with the actual Campaign ID and Keyword from which user has clicked.

MyDataNinja takes that advantage where possible and introduces 2 more utm parameters:

- utm_mydataninja - **Unique Ad ID** of the ad which user has clicked
- utm_cmydataninja - **Unique Campaign ID** of the ad which user has clicked

With these paramters our Snippet recognises the exact campaign and ad which user has clicked on and starts tracking of events, sales, orders, leads and every action which user performs on webpage.

### How to add UTM parameters to my ads?

MyDataNinja UTM parameters are automatically placed on each running campaigns and ads on your advertiser accounts right after you've [connected and set up your Ad Account](https://mydataninja.com/connect-ad-accounts-mydataninja/). But there are some **exceptions** because of API limitations and requires doing it manually.

Also, there are some cases where it's impossible to track correctly despite correctly placed utm parameters, but we've detailed docs and solutions written down in the links below by advertiser networks:

- [Google Ads](./google-ads)
- [Meta Ads](./meta-ads)
- [Tiktok Ads](./meta-ads)
- [Bing Ads](./meta-ads)
