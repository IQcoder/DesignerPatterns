# PHP 设计模式 —— 装饰器模式（Decorator）
## 1、模式定义
装饰器模式能够从一个对象的外部动态地给对象添加功能。

通常给对象添加功能，要么直接修改对象添加相应的功能，要么派生对应的子类来扩展，抑或是使用对象组合的方式。显然，直接修改对应的类这种方式并不可取。在面向对象的设计中，我们也应该尽量使用对象组合，而不是对象继承来扩展和复用功能。装饰器模式就是基于对象组合的方式，可以很灵活的给对象添加所需要的功能。装饰器模式的本质就是动态组合。动态是手段，组合才是目的。

常见的使用示例：Web服务层 —— 为 REST 服务提供 JSON 和 XML 装饰器。

## 2、UML类图
![Decorator-UML.png](/static/images/Decorator-UML.png)