<?php
// Traversable 检测一个类是否可使用 foreach 进行遍历
// Traversable 无法被单独实现, 要创建一个可遍历的类, 请实现 IteratorAggregate 或 Iterator 接口
interface Traversable {
}
// 接口本身没有任何方法, 它的作用仅仅是作为可遍历类的基本接口