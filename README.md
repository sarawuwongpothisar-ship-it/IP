<h1><b> IP-Tracer v3.0.2 </b></h1> 

## What is IP-Tracer ?

IP-Tracer เป็นโปรแกรมที่ใช้ติดตามที่อยู่ IP IP-Tracer พัฒนาขึ้นสำหรับระบบปฏิบัติการ Termux และ Linux คุณสามารถดึงข้อมูลที่อยู่ IP ได้อย่างง่ายดายโดยใช้ IP-Tracer IP-Tracer ใช้ ip-api ในการติดตามที่อยู่ IP

<p align="center">
<img width="47%" src="src/Screenshot_2018-08-06-15-32-17-1.png"/>
<img width="40%" src="src/Screenshot_2020-05-17-20-52-59-1.png"/>
</p>

## How to install IP-Tracer ?

* `apt update`

* `apt install git -y`

* `git clone https://github.com/rajkumardusad/IP-Tracer.git`

* `cd IP-Tracer`

* `chmod +x install`

* `sh install` or `./install`


## How to use IP-Tracer

* `trace -m` to track your own ip address.

* `trace -t target-ip` to track other's ip address for example `ip-tracer -t 127.0.0.1`

* `trace` for more information.

**OR**

* `ip-tracer -m` to track your own ip address.

* `ip-tracer -t target-ip` to track other's ip address for example `ip-tracer -t 127.0.0.1`

* `ip-tracer` for more information.

