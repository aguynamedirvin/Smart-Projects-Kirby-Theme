<?php if(!defined('KIRBY')) exit ?>

# project blueprint

title: Project
pages: false

fields:
   title: 
      label: Project
      type: text
      required: true
   date:
      label: Entry date
      type: date
      required: true

   general_headline:
      label: General
      type: headline
   client:
      label: Client / Owner
      type: text
      required: true
      width: 1/2
   person:
      label: Contact Person
      type: text
      required: true
      width: 1/2
   client_email:
      label: Client / Owner email
      type: text
      required: true
      width: 1/2
   client_id:
      label: Client ID
      type: text
      required: true
      width: 1/2
   website:
      label: Website
      type: text
      validate:url
      width: 1/2

   cms_headline:
      label: Content Management
      type: headline
   cms:
      label: CMS
      type: text
      width: 1/2
   cms_url:
      label: CMS Page
      type: text
      width: 1/2
   cms_login:
      label: CMS Login
      type: text
      width: 1/2
   cms_password:
      label: CMS Password
      type: text
      width: 1/2
   
   stats_headline:
      label: Statistics
      type: headline
   stats:
      label: Stats Provider
      type: text
      width: 1/2
   stats_url:
      label: Stats URL
      type: text
      width: 1/2
   stats_login:
      label: Stats Login
      type: text
      width: 1/2
   stats_password:
      label: Stats Password
      type: text
      width: 1/2

   webhosting_headline:
      label: Web Hosting
      type: headline
   webhosting_provider:
      label: Webhosting Provider
      type: text
      width: 1/2
   webhosting_service:
      label: Service
      type: text
      width: 1/2
   webhosting_domains:
      label: Domain(s)
      type: text
      width: 1/2
   webhosting_admin:
      label: Admin URL
      type: text
      width: 1/2
   webhosting_login:
      label: Webhosting Login
      type: text
      width: 1/2
   webhosting_password:
      label: Webhosting Password
      type: text
      width: 1/2

   ftp_headline:
      label: FTP
      type: headline
   ftp_server:
      label: FTP-Server
      type: text
      width: 1/2
   ftp_login:
      label: FTP-Login
      type: text
      width: 1/2
   ftp_password:
      label: FTP-Password
      type: text
      width: 1/2

   database_headline:
      label: Database
      type: headline
   database_url:
      label: Database URL
      type: text
      width: 1/2
   database_login:
      label: Database Login
      type: text
      width: 1/2
   database_password:
      label: Database Password
      type: text
      width: 1/2

   mailbox_headline:
      label: Mailbox
      type: headline
   mailbox_url:
      label: Mailbox URL
      type: text
      width: 1/2
   mailbox_login:
      label: Mailbox Login
      type: text
      width: 1/2
   mailbox_password:
      label: Mailbox Password
      type: text
      width: 1/2

   network1_headline:
      label: Network 1
      type: headline
   network1:
      label: Network 1
      type: text
      width: 1/2
   network1_url:
      label: Network 1 URL
      type: text
      width: 1/2
   network1_login:
      label: Network 1 Login
      type: text
      width: 1/2
   network1_password:
      label: Network 1 Passwort
      type: text		
      width: 1/2

   network2_headline:
      label: Network 2
      type: headline
   network2:
      label: Network 2
      type: text
      width: 1/2
   network2_url:
      label: Network 2 URL
      type: text
      width: 1/2
   network2_login:
      label: Network 2 Login
      type: text
      width: 1/2
   network2_password:
      label: Network 2 Passwort
      type: text
      width: 1/2

   network3_headline:
      label: Network 3
      type: headline
   network3:
      label: Network 3
      type: text
      width: 1/2
   network3_url:
      label: Network 3 URL
      type: text
      width: 1/2
   network3_login:
      label: Network 3 Login
      type: text
      width: 1/2
   network3_password:
      label: Network 3 Passwort
      type: text
      width: 1/2