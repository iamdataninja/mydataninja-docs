---
menu-position: 3
title: 'Bing Ads Tracking'
---

### How to enable tracking on Google Ads ?

Tracking your Bing Ads is now easier than ever with MyDataNinja. Our automated tracking system requires just a few steps to get started:

##### 1. Log in to your MyDataNinja account and navigate to "Marketing Channels" on the sidebar.

##### 2. Select Bing Ads and connect the accounts you want to track.

##### 3. Once connected, proceed to the "Set Up Accounts" step

##### 4. Click the "Setup" button and check the "Enable auto-tracking" checkboxes.

##### 5. The setup process may take a few minutes. You’ll receive a notification when it’s complete.

### Which Ads Will Be Tracked Automatically?

When you enable automatic tracking, MyDataNinja will track all active campaigns and ads at the time of setup. For any new ads created in the future, MyDataNinja will continue to apply auto-tracking settings until you disconnect your Bing Ads account.

### How Does Bing Ads Tracking Work Behind the Scenes?

During the tracking setup, MyDataNinja adds specific UTM parameters to ensure accurate tracking.

- Account level
- Campaign level
- Ad level

The UTM parameters `utm_mydataninja` and `utm_cmydataninja` are appended to the Final URL suffix at each level. These parameters are dynamically replaced by Bing’s creative and campaign IDs.

For example, when setup is complete, your tracked URLs will include parameters like this:
`utm_mydataninja={creative}&utm_cmydataninja={campaignid}`

This ensures MyDataNinja can report performance accurately across all levels of your Bing Ads campaigns.

### How to Set Up Tracking Manually for Specific Ads?

If you prefer to track only certain ads manually, you can use the same tracking principles. Simply add the parameters `utm_mydataninja={creative}&utm_cmydataninja={campaignid}` to the Final URL suffix of the ads, campaigns, or accounts you want to track.

### What is the utm_cmydataninja Parameter?

The `utm_cmydataninja` parameter represents the Campaign ID of the clicked ad. This is particularly useful for campaign types that don’t have distinct creative elements, such as Shopping Ads or Audience Ads.

For these types of campaigns, MyDataNinja’s reports will focus on the campaign level, providing insights even when creative-level tracking isn’t applicable.

### Conclusion

Bing Ads tracking with MyDataNinja is streamlined and efficient, allowing you to gain valuable insights into your campaigns. Whether you prefer automatic tracking for all ads or a manual approach for specific ones, MyDataNinja ensures accurate and reliable data collection. Start tracking your Bing Ads today and make smarter marketing decisions with ease!
