# IP-Filter-PHP
IPFilterPHP is a PHP script that improves web application security by filtering incoming requests based on IP addresses. It blocks requests from a predefined blocklist or non-Iranian IPs while allowing trusted users through a whitelist. This easily integrable solution offers robust protection against unwanted access.

## Features
- **IP Blocking**: Automatically blocks IPs listed in the blocklist.
- **Whitelist Support**: Allows specific IPs to bypass the filter.
- **Country Check**: Stops requests from IPs not originating from Iran.
- **Dynamic Integration**: Easily include the script in any PHP file.

## Installation
1. Include the script in your PHP file:
   ```php
   include 'check-ip.php';
   ```

## Configuration
- **Whitelist**: Modify the `$ipWhite` array in `check-ip.php` to add IPs that should bypass the filter.
- **Error Message**: Customize the `$textError` variable to change the error message displayed to blocked users.

## Usage
Once included, the script will automatically check the requesting IP against the blocklist and whitelist. If the IP is blocked or not from Iran, the script will terminate the request and display the error message.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
