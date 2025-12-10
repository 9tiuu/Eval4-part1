
<h1>Instalación de Apache (Linux)</h1>

1. sudo dnf install -y httpd php

    sudo systemctl start httpd
    sudo systemctl enable httpd
    sudo systemctl status httpd

2. cd /var/www/html/

    sudo nano info.php

        <?php phpinfo(); phpinfo(INFO_MODULES); ?>


- 37 y 1708
- 2581

<h1>Instalación de git</h1>

sudo dnf install git -y
sudo git clone https://repositorio
