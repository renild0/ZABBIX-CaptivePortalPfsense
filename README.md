# ZABBIX-CaptivePortalPfsense

Monitoring Users Logged In Captive Portal Pfsense 2.5.2

Tested on Zabbix 4.0.x | Pfsense 2.5.2

1. First copy the cp_users_zbx.php file to the /root/scripts directory.
In Diagnostics / Command Prompt, insert this single line:
curl --create-dirs -o /root/scripts/cp_users_zbx.php https://raw.githubusercontent.com/renild0/ZABBIX-CaptivePortalPfsense/main/cp_users_zbx.php

2. Access the Zabbix Agent 4.0 settings (Services\Zabbix Agent 4.0), under Advanced Features-> User Parameters insert the line:
UserParameter=pfsense.cp,/usr/local/bin/php -q /root/scripts/cp_users_zbx.php

3. Import the template, link the Host and start monitoring!
