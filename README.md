# DNSManager.io DDNS server

A microservice that acts as a proxy for the DNSManager.io API to be compatible with known DDNS providers.

## Implementations

The following endpoints have been included:

 - Dyn

### Dyn

Compatible with the `GET /nic/update` endpoint by Dyn. You can find the original documentation [here](https://help.dyn.com/remote-access-api/perform-update/), but here is how you call to the proxy:

```
GET https://{api-id}:{api-key}@dnsmanagerddns.example/nic/update?hostname={domainid}.{recordid}&myip={record-content}
```

## Security

If you are an outside collaborator and discover a security vulnerability within this repository, please send an e-mail to our security team via security-external@webmethod.nl. All security vulnerabilities will be promptly addressed.

## License & support

Licensed under the MIT license. If you'd like, you can [buy me a kopje koffie](https://buymeacoffee.com/janyk) ☕️