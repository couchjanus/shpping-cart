# shopping-cart

## Table of Contents

- [Появление и иcчезновение элементов](#Появление-и-иcчезновение-элементов)
- [Поочередное разворачивание и сворачивание элементов](#Поочередное-разворачивание-и-сворачивание-элементов)
- [Разворачивание и сворачивание элементов](#Разворачивание-и-сворачивание-элементов)
  - [Сворачивание элементов](#Сворачивание-элементов)
  - [Разворачивание элементов](#Разворачивание-элементов)
- [Работа с атрибутом value](#Работа-с-атрибутом-value)
- [Перемещения по дереву DOM](#Перемещения-по-дереву-DOM)
  - [Поиск элементов лежащих перед выбранными](#Поиск-элементов-лежащих-перед-выбранными)
  - [Поиск элементов лежащих после заданных](#Поиск-элементов-лежащих-после-заданных)
- [Очередь предстоящих функций](#Очередь-предстоящих-функций)
- [Очищение очереди функций](#Очищение-очереди-функций)
- [Запуск следующей функции в очереди](#Запуск-следующей-функции-в-очереди)
- [Временное приостановление дальнейших анимаций](#Временное-приостановление-дальнейших-анимаций)


# Появление и иcчезновение элементов

## .show()  .hide()

С помощью этих функций можно плавно показывать и скрывать выбранные элементы на странице, за счет изменения размера и прозрачности. после скрытия элемента, его css-свойство display становится равным none, а перед появлением, оно получает свое прежнее значение обратно. Метод имеет три варианта использования:


## .show()  .hide()

Мгновенно показывает/скрывает выбранные элементы, установив их css-свойство display в none, не изменяя при этом их прозрачность и размеры.

## .show(duration,[callback])  .hide(duration,[callback])

duration — продолжительность выполнения анимации (появления или скрытия). Может быть задана в миллисекундах или строковым значением 'fast' или 'slow' (200 и 600 миллисекунд). Если этот параметр не задан, анимация будет происходить мгновенно, элемент просто появится/исчезнет

callback — функция, заданная в качестве обработчика завершения анимации (появления или скрытия). Ей не передается никаких параметров, однако, внутри функции, переменная this будет содержать DOM-объект анимируемого элемента. Если таких элементов несколько, то обработчик будет вызван отдельно, для каждого элемента.

## .show([duration],[easing],[callback])  .hide([duration],[easing],[callback])

easing — изменение скорости анимации (будет ли она замедляется к концу выполнения или наоборот ускорится). 


## Примеры использования:

```js
$("#leftFit").hide()   // мгновенно скроет элемент с идентификатором leftFit.

$("#leftFit").show()   // мгновенно покажет элемент с идентификатором leftFit.

$("#leftFit").hide(300) // в течении 1/3 секунды скроет элемент с идентификатором leftFit.

$("#leftFit").show("slow") // в течении 600 миллисекунд вернет видимость элементу с идентификатором leftFit.
```
# Поочередное разворачивание и сворачивание элементов

Можно скрывать и показывать элементы с помощью сворачивания/разворачивания (за счет изменения высоты). Это делают функции slideUp(), slideDown().

## .slideToggle()

Вызов этого метода приводит к плавному сворачиванию (если элемент развернут) или разворачиванию (если элемент свернут) выбранных элементов на странице. Отметим, что после скрытия элемента, его css-свойство display становится равным none, а перед появлением, оно получает свое прежнее значение обратно. Метод имеет два варианта использования:

### .slideToggle([duration],[callback])

duration — продолжительность выполнения анимации (появления или скрытия). Может быть задана в миллисекундах или строковым значением 'fast' или 'slow' (200 и 600 миллисекунд). По умолчанию, анимация будет происходить за 400 миллисекунд.

callback — функция, заданная в качестве обработчика завершения анимации (появления или скрытия). Ей не передается никаких параметров, однако, внутри функции, переменная this будет содержать DOM-объект анимируемого элемента. Если таких элементов несколько, то обработчик будет вызван отдельно, для каждого элемента.

### .slideToggle([duration],[easing],[callback])

easing — изменение скорости анимации (будет ли она замедляется к концу выполнения или наоборот ускорится). 

## Примеры использования:

```js
$("#leftFit").slideToggle() // свернет/развернет элемент с идентификатором leftFit за 400 мс.

$("#leftFit").slideToggle(300)  // в течении 1/3 секунды свернет/развернет элемент с идентификатором leftFit.

$("#leftFit").slideToggle("slow")  // в течении 600 мс свернет/развернет элемент с идентификатором leftFit.

```

Можно скрывать и показывать элементы с помощью изменения размеров и прозрачности, с помощью функций show(), hide().

Если вы хотите только развернуть или только свернуть элементы, воспользуйтесь методами .slideDown(), .slideUp()

# Разворачивание и сворачивание элементов

## .slideDown()   .slideUp()

С помощью этих функций можно показывать и скрывать выбранные элементы на странице, за счет плавного разворачивания и сворачивания. после скрытия элемента, его css-свойство display становится равным none, а перед появлением, оно получает свое прежнее значение обратно. Методы имеют два варианта использования:

## .slideDown([duration],[callback])  .slideUp([duration],[callback])

duration — продолжительность выполнения анимации (появления или скрытия). Может быть задана в миллисекундах или строковым значением 'fast' или 'slow' (200 и 600 миллисекунд). По умолчанию, анимация будет происходить за 400 миллисекунд.

callback — функция, заданная в качестве обработчика завершения анимации (появления или скрытия). Ей не передается никаких параметров, однако, внутри функции, переменная this будет содержать DOM-объект анимируемого элемента. Если таких элементов несколько, то обработчик будет вызван отдельно, для каждого элемента.

## .slideDown([duration],[easing],[callback])  .slideUp([duration],[easing],[callback])

easing — изменение скорости анимации (будет ли она замедляется к концу выполнения или наоборот ускорится).

## Примеры использования:

```js

$("#leftFit").slideUp() // свернет элемент с идентификатором leftFit за 400 мс.

$("#leftFit").slideDown()   // развернет элемент с идентификатором leftFit за 400 мс.

$("#leftFit").slideUp(300)  // в течении 1/3 секунды свернет элемент с идентификатором leftFit.

$("#leftFit").slideDown("slow") // в течении 600 мс развернет элемент с идентификатором leftFit.
```
## Сворачивание элементов

### 01.js

```js
   $(function() {

      $('.buy').click(function() {
        $('.singleMember p').slideUp();
        $('.menu').css('top', '40%');

        $('.singleMember .icon').css('display', 'none'); 
        $('.singleMember .buy').css('display', 'none'); 
        $('.singleMember .detail').css('display', 'block'); 
        
      });
 
 });

```

### style.css

```css

.singleMember .menu {
  width: 250px;
  height: 360px;
  top: 80%;
  background-color: #222;
  color: #EE3B24;
  position: absolute;
  -webkit-transition: all .7s;
  transition: all .7s;
}

```

## Разворачивание элементов

### 03.js

```js

    $('.cancel').click(function() {
        $('.singleMember p').slideDown();
        $('.menu').css('top', '80%');
        $('.singleMember .icon').css('display', 'block'); 
        $('.singleMember .buy').css('display', 'block'); 
        $('.singleMember .detail').css('display', 'none'); 
    });

```

# Работа с атрибутом value

## Метод .val()

Метод позволяет получать и изменять значения элементов форм. Для элементов input это значение атрибута value; для списков выбора (select) – значение value выбранного элемента (в случае множественного выбора – массив значений); в случае с textarea, метод .val() будет работать непосредственно с содержимым тега textarea. Метод имеет три варианта использования:

### .val():string,arrayv

возвращает значение атрибута value у выбранного элемента формы. Если выбрано несколько элементов, то значение будет взято у первого. 
В случае, элемента формы 

```html
<select multiple="multiple"> 

```
возвращается массив всех выбранных значений.

### .val(newVal)

атрибуту value будет присвоено значение newVal, у всех выбранных элементов.

### .val(function(index, newVal))

атрибуту value будет присвоено значение, возвращенное пользовательской функцией. Функция вызывается отдельно, для каждого из выбранных элементов. При вызове, ей передаются следующие параметры: index — позиция элемента в наборе, newVal — текущее значение атрибута value у элемента.

## Примеры использования:
```js
$("#surname").val() // вернет значение элемента с идентификатором surname

$(".surname").val() // вернет значение первого элемента с классом surname

$("input[name='surname']").val()   // вернет значение первого элемента формы с атрибутом name равным surname
```
## 02.html
```html
    <div class="quantity-input">
      <input class="minus btn" type="button" value="-">
      <input class="input-text quantity text" value="3" size="4">
      <input class="plus btn" type="button" value="+">
    </div>
```
## 02.html

```js

    $(".plus").click(function() {
       var val = parseInt($(this).prev().attr('value'));
       $(this).prev().attr('value', val+1);
    });

    $(".minus").click(function() {
       var val = parseInt($(this).next().attr('value'));
       $(this).next().attr('value', val-1);
    });

```
# Перемещения по дереву DOM

## Поиск элементов лежащих перед выбранными

## .prev()

Для каждого из выбранных элементов находит предшествующий ему элемент (но только если он лежит на том же уровне иерархии DOM).

```
.prev([selector])
```

Возвращает элементы, которые находятся непосредственно перед каждым из выбранных элементов. При необходимости, можно задать селектор selector для фильтрации результата.

### Примеры использования:
```js
$("div").prev() // вернет элементы, которые находятся непосредственно перед div-элементами на странице.

$("div").prev(".bigBlock")  // вернет элементы класса bigBlock, которые находятся непосредственно перед div-элементами.
```

## Поиск элементов лежащих после заданных

### .next()

Осуществляет поиск элементов, лежащих непосредственно после заданных элементов (по одному для каждого из заданных). 
```
.next([selector])
```
Возвращает элементы, которые находятся непосредственно после каждого из выбранных элементов. При необходимости, можно задать селектор selector для фильтрации результата.
### Примеры использования:
```js
$("div").next() // вернет элементы, которые находятся непосредственно после div-элементов на странице.

$("div").next(".bigBlock")  // вернет элементы класса bigBlock, которые находятся непосредственно после div-элементов.
```

## 04.html

```js
    $('.addcart').click(function() {
      var y = 180;
      $('.contentItem').css({
          'transform': 'rotateY(' + y + 'deg)'
      });

  });

```
# Очередь предстоящих функций

## .queue()
Возвращает или изменяет (в зависимости от переданных параметров) очередь функций.

Дело в том, что к элементам страницы, jQuery привязывает одну или несколько очередей функций. Каждая функции в такой очереди, автоматически вызывается, когда завершится предыдущая. Функции, выполняющие анимационные эффекты, помещаются в такую очередь автоматически. Метод queue() позволяет получать и изменять очереди функций. Имеется два варианта его использования:

## .queue([queueName])

Возвращает очередь функций (в виде массива), относящихся к выбранным элементам. С помощью необязательного параметра queueName можно указать имя очереди, которая должна быть возвращена. По умолчанию, это стандартная очередь "fx".

## .queue([queueName], newQueue)

Заменяет очередь с именем queueName, на newQueue. По умолчанию, будет заменена стандартная очередь "fx".

## .queue([queueName], callback(next))

Устанавливает функцию callback в конец очереди. Для правильного функционирования очереди, в конце метода callback необходимо выполнять одну из двух операций: next(); или $(this).dequeue();. Эти операции нужны для запуска выполнения следующих элементов очереди

## Рассмотрим простейший случай образования очереди:

```js
$('#foo').slideUp().fadeIn(); // задаст элементу с идентификатором foo две анимации
```
в результате, элемент с идентификатором foo начнет выполнять эффект slideUp(), а метод, выполняющий эффект fadeIn() будет помещен в очередь и начнет свое выполнение только после завершения предшествующего метода.

## 05.html
```js
$('.addcart').click(function() {
      var y = 180;
      $('.contentItem').css({
          'transform': 'rotateY(' + y + 'deg)'
      });

    $('.contentItem').delay(3000).queue(function() {
      $(this).css({
        'transform': 'rotateY(0deg)'
      }).dequeue();
      $('.singleMember p').slideDown();
      $('.menu').css('top', '80%');
      $('.icon').toggle();
    });

  });
```

# Очищение очереди функций

## .clearQueue()

Очищает очередь функций у выбранных элементов старницы. 
```
.clearQueue([queueName])
```
queueName — имя очереди. Если оно не будет указано, то будет очищена стандартная очередь "fx".

Рассмотрим простейший пример:
```js
$('#foo').slideUp().fadeIn();
$('#foo').clearQueue();
```
произойдет следующее: в начале, элементу с идентификатором foo будет задано два анимационных эффекта, пока первый из них будет выполняться, второй будет помещен в очередь. Но поскольку, к элементу foo будет также применен метод clearQueue(), то очередь будет очищена и удаленный из нее метод fadeIn() так и не будет выполнен.

# Запуск следующей функции в очереди

## .dequeue()

Начинает выполнение следующей функции в очереди. 
```
.dequeue([queueName])
```
queueName — имя очереди. По умолчанию используется стандартная очередь "fx".


# Временное приостановление дальнейших анимаций

## .delay()
Устанавливает задержку следующей функции в очереди функций. 
```
.delay(duration, [queueName])
```

Задерживает выполнение следующей в функции в очереди на duration миллисекунд. По умолчанию, остановка происходит в стандартной очереди с именем "fx", однако, можно указать и другую очередь, с помощью параметра queueName.

## 06.html

```js

$('.addcart').click(function() {
        var y = 180;
        $('.contentItem').css({
          'transform': 'rotateY(' + y + 'deg)'
        });

    $('.contentItem').delay(3000).queue(function() {
      $(this).css({
        'transform': 'rotateY(0deg)'
      }).dequeue();
      $('.singleMember p').slideDown();
      $('.menu').css('top', '80%');
      $('.icon').toggle();
    });

    $('.singleMember .icon').css('display', 'block'); 
    $('.singleMember .buy').css('display', 'block'); 
    $('.singleMember .detail').css('display', 'none'); 
  });
```
## 07.html
```html
<script id="productTemplate" type="text/template">

  <div class="contentItem text-center" productId="">
    <div class="singleMember">
          <p class="product-name">Very&nbsp;Nice&nbsp;Cat</p>
          <div class="icon">
            <div class="icon_bg"></div>
            <i class="fa fa-shopping-cart fa-2x"></i>
          </div>
          <div class="image">
            <img src="images/1.jpg" alt="image" width="260" />
          </div>
          <div class="menu">
            <div class="price product-price">
              $9.99
            </div>
            <div class="buy">
              Buy now!
            </div>
            <div class="detail">
              Detail
            </div>

            <div class="howmany">
              <div class="quantity-input">
                <input class="minus btn" type="button" value="-">
                <input class="input-text quantity text" value="3" size="4">
                <input class="plus btn" type="button" value="+">
              </div>
            </div>
            <div class="cancel">
              Cancel
            </div>
            <div class="addcart">
              Add to Cart!
            </div>
          </div>
     </div>
     <div class="card_back">
          <i class="fa fa-check fa-4x"></i>
          <p>Success!</p>
     </div>
  </div>  <!-- item wrapper end -->
</script>

```

## function makeItem

```js

 function makeItem($template, product, picture='cats'){

      $template.find('.contentItem').attr('productId', product["id"]);

      $template.find('.product-name').text(product.name).attr('productName', product["name"]);

      $template.find('img').attr('src', "images/" + product.picture);

      $template.find('.product-price').text('$' + product["price"]).attr('productPrice', product["price"]);

      return $template;
    }
```

## let $template

```js

let $template = $($('#productTemplate').html());

    let data = {
        "id": 8,
        "name": "Cool Cat",
        "price": 333,
        "picture": "4.jpg",
        "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque."
    };

    $(".product-items").append(makeItem($template, data));
   
```
## 08.html

```js
$(function() {


    for (var i=0; i<Object.keys(data).length; i++){
        var $template = $($('#productTemplate').html());

        $(".product-items").append(makeItem($template, data[i]));
    }
 

```

## 09.html

```js
$('body').on('click', '.buy', function() {

        $(this).parents('.singleMember').find('.singleMember p').slideUp();
        $(this).parents('.singleMember').find('.menu').css('top', '40%');
        $(this).parents('.singleMember').find('.icon').css('display', 'none'); 
        $(this).parents('.singleMember').find('.buy').css('display', 'none'); 
        $(this).parents('.singleMember').find('.detail').css('display', 'block'); 
        
      });
  
```
