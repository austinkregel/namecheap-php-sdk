# Namecheap PHP SDK
Currently underdevelopment, and open to new PRs and issues.

Planned or available features. Right now I will only be adding in features that I need personally. If there is something that you need, please make a PR for it.

*Note:* Due to Namecheaps... Odd way of naming and doing things for their docs this feature/roadmap list will follow the format [Command - description]

### Domain Features
  - [x] domains.getList - A list of domains for the authenticated user 
  - [ ] domains.getContacts - The contact information of a domain, usually the information discovered through Whois.
  - [ ] domains.create - Register a new domain name
  - [ ] domains.getTldList - A list of all TLDS that can be registered on Namecheap
  - [ ] domains.setContacts - Sets the whois information for a domain
  - [x] domains.check - Checks to see if a domain is available.
  - [ ] domains.reactivate - Reactivates an expired domain
  - [x] domains.renew - Renews an expiring domain
  - [ ] domains.getRegistrarLock - Gets the RegistrarLock status of a domain (used for transferring domains out of/to a registrar)
  - [ ] domains.setRegistrarLock - Sets the status of a domain
  - [x] domains.getInfo - Returns information about a requested domain.   
 
##### DNS
  - [ ] domains.dns.setDefault - Sets the domain servers to the Namecheap default DNS servers. (Which is required for using their DNS editing interface)
  - [ ] domains.dns.setCustom - Sets the domain servers
  - [ ] domains.dns.getList - Gets the DNS servers for a domain
  - [ ] domains.dns.getHosts - Gets the DNS host record settings for a domain
  - [ ] domains.dns.getEmailForwarding - Gets the email forward settings 
  - [ ] domains.dns.setEmailForwarding - sets the email forward settings 
  - [ ] domains.dns.setHosts - Set the host records for a domain 
  
##### NS
  - [ ] domains.ns.create - Creates a new nameserver
  - [ ] domains.ns.delete - deletes a nameserver
  - [ ] domains.ns.getInfo - Gets the info about a nameserver 
  - [ ] domains.ns.update - Updates the IP of a nameserver

##### Transfer
  - [ ] domains.transfer.create - Transfers a domain to Namecheap. You can only transfer .biz, .ca, .cc, .co, .co.uk, .com, .com.es, .com.pe, .es, .in, .info, .me, .me.uk, .mobi, .net, .net.pe, .nom.es, .org, .org.es, .org.pe, .org.uk, .pe, .tv, .us domains through API
  - [ ] domains.transfer.getStatus - Get the status of a transfer
  - [ ] domains.transfer.updateStatus - Update the status of a transfer
  - [ ] domains.transfer.getList - get the list of domain transfers.

##### SSL
As of this moment I am not supporting SSL through NC because of projects like LetsEncrypt, where you can get free SSL certs.

### Users
  - [ ] users.getPricing - Returns the pricing info for a requested product
  - [ ] users.getBalances - Get information about funds on a users account.
  - [ ] users.changePassword - Changes the password for a user
  - [ ] users.update - Updates user account information
  - [ ] users.createaddfundrequest - Creates a request to add funds for a user through a credit card
  - [ ] users.getAddFundsStatus - Gets the status of a funds transfer
  - [ ] users.create - Create a new namecheap account under the APIUser
  - [ ] users.login - validates a username/password
  - [ ] users.resetPassword - Sends a reset password link to the users email.
 
##### Address
  - [ ] users.address.create - creates a new address for a user
  - [ ] users.address.delete - deletes an address for a user
  - [ ] users.address.getInfo - gets information about an address
  - [ ] users.address.getlist - gets a list of address for the user
  - [ ] users.address.setDefault - Set the default address
  - [ ] users.address.update - Updates a particular address
  
### WhoIsGuard
  - [ ] whoisguard.changeemailaddress - Change the WhoIsGuard email address
  - [ ] whoisguard.enable - enable whois guard
  - [ ] whoisguard.disable - disable whoisguard
  - [ ] whoisguard.unallot - unallot whoisguard
  - [ ] whoisguard.discard - discards whoisguard
  - [ ] whoisguard.allot - allots whoisguard
  - [ ] whoisguard.getList - Gets a list of WhoisGuard privacy protection
  - [ ] whoisguard.renew - Renews WhoisGuard privacy protection
   
  