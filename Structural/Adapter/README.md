# PHP 设计模式 —— 适配器模式（Adapter / Wrapper）
# 1、模式定义
首先我们来看看什么是适配器。

适配器的存在，就是为了将已存在的东西（接口）转换成适合我们需要、能被我们所利用的东西。在现实生活中，适配器更多的是作为一个中间层来实现这种转换作用。比如电源适配器，它是用于电流变换（整流）的设备。

适配器模式将一个类的接口转换成客户希望的另外一个接口，使得原本由于接口不兼容而不能一起工作的那些类可以在一起工作。

# 2、UML类图
![Adapter-UML.png](/static/images/Adapter-UML.png)