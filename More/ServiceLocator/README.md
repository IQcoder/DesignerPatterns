# PHP 设计模式 —— 服务定位器模式（Service Locator）
## 1、模式定义
当系统中的组件需要调用某一服务来完成特定的任务时，通常最简单的做法是使用 new 关键字来创建该服务的实例，或者通过工厂模式来解耦该组件与服务的具体实现部分，以便通过配置信息等更为灵活的方式获得该服务的实例。然而，这些做法都有着各自的弊端：

在组件中直接维护对服务实例的引用，会造成组件与服务之间的关联依赖，当需要替换服务的具体实现时，不得不修改组件中调用服务的部分并重新编译解决方案；即使采用工厂模式来根据配置信息动态地获得服务的实例，也无法针对不同的服务类型向组件提供一个管理服务实例的中心位置；
由于组件与服务之间的这种关联依赖，使得项目的开发过程受到约束。在实际项目中，开发过程往往是并行的，但又不是完全同步的，比如组件的开发跟其所需要的服务的开发同时进行，但很有可能当组件需要调用服务时，服务却还没完成开发和单体测试。遇到这种问题时，通常会将组件调用服务的部分暂时空缺，待到服务完成开发和单体测试之后，将其集成到组件的代码中。但这种做法不仅费时，而且增大了出错的风险；
针对组件的单体测试变得复杂。每当对组件进行单体测试时，不得不为其配置并运行所需要的服务，而无法使用Service Stub来解决组件与服务之间的依赖；
在组件中可能存在多个地方需要引用服务的实例，在这种情况下，直接创建服务实例的代码会散布到整个程序中，造成一段程序存在多个副本，大大增加维护和排错成本；
当组件需要调用多个服务时，不同服务初始化各自实例的方式又可能存在差异。开发人员不得不了解所有服务初始化的API，以便在程序中能够正确地使用这些服务；
某些服务的初始化过程需要耗费大量资源，因此多次重复地初始化服务会大大增加系统的资源占用和性能损耗。程序中需要有一个管理服务初始化过程的机制，在统一初始化接口的同时，还需要为程序提供部分缓存功能。
要解决以上问题，我们可以在应用程序中引入服务定位器（Service Locator）模式。

服务定位器（Service Locator）模式是一种企业级应用程序体系结构模式，它能够为应用程序中服务的创建和初始化提供一个中心位置，并解决了上文中所提到的各种设计和开发问题。

服务定位器模式和依赖注入模式都是控制反转（IoC）模式的实现。我们在服务定位器中注册给定接口的服务实例，然后通过接口获取服务并在应用代码中使用而不需要关心其具体实现。我们可以在启动时配置并注入服务提供者。

## 2、UML类图
![Service-Locator-UML.png](/static/images/Service-Locator-UML.png)