# htmlspecialchars 与 htmlentities 的区别

共同点：两者的作用都是把特殊字符编码成 HTML 实体，一般用于防范 XSS 攻击。

区别是：`htmlspecialchars` 只会转换有限个特殊字符，而 `htmlentities` 会转换更多的特殊字符。防范 XSS 攻击使用 `htmlspecialchars` 就已经足够了，`htmlentities` 基本用不上。

## 详细对比

htmlentities 会对以下特殊字符进行编码：

```php
echo implode(array_values(get_html_translation_table(HTML_ENTITIES)), "\t" );

//output
" & < >
¡ ¢ £ ¤ ¥ ¦ § ¨ © ª « ¬ ­ ® ¯ ° ± ² ³ ´ µ ¶ · ¸ ¹ º » ¼ ½ ¾ ¿ À Á Â Ã Ä Å Æ Ç È É Ê Ë Ì Í Î Ï Ð Ñ Ò Ó Ô Õ Ö × Ø Ù Ú Û Ü Ý Þ ß à á â ã ä å æ ç è é ê ë ì í î ï ð ñ ò ó ô õ ö ÷ ø ù ú û ü ý þ ÿ Œ œ Š š Ÿ ƒ ˆ ˜ Α Β Γ Δ Ε Ζ Η Θ Ι Κ Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ ς σ τ υ φ χ ψ ω ϑ ϒ ϖ       ‌ ‍ ‎ ‏ – — ‘ ’ ‚ “ ” „ † ‡ • … ‰ ′ ″ ‹ › ‾ ⁄ € ℑ ℘ ℜ ™ ℵ ← ↑ → ↓ ↔ ↵ ⇐ ⇑ ⇒ ⇓ ⇔ ∀ ∂ ∃ ∅ ∇ ∈ ∉ ∋ ∏ ∑ − ∗ √ ∝ ∞ ∠ ∧ ∨ ∩ ∪ ∫ ∴ ∼ ≅ ≈ ≠ ≡ ≤ ≥ ⊂ ⊃ ⊄ ⊆ ⊇ ⊕ ⊗ ⊥ ⋅ ⌈ ⌉ ⌊ ⌋ ⟨ ⟩ ◊ ♠ ♣ ♥ ♦
```

htmlspecialchars 会对以下特殊字符进行编码：

```php
echo implode( array_values( get_html_translation_table( HTML_SPECIALCHARS ) ), "\t" );

//output
" & < >
```
## 例子

```php
echo htmlentities('♠ ♣ ♥ ♦');

//输出结果
&spades; &clubs; &hearts; &diams;


echo htmlspecialchars('♠ ♣ ♥ ♦');

//输出结果
♠ ♣ ♥ ♦
```

## 参考蚊香

- [htmlspecialchars vs htmlentities?](https://teamtreehouse.com/community/htmlspecialchars-vs-htmlentities)
- [htmlentities() vs. htmlspecialchars()](http://stackoverflow.com/questions/46483/htmlentities-vs-htmlspecialchars)

