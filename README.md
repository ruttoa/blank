# Blank theme

## Typography

This theme uses type scaling system. Type scale is set in theme.json `settings.custom.type-scale-mobile` and `settings.custom.type-scale-desktop` values.

Values are calculated for the different font sizes multiplying the scale value with itself using CSS pow() calculation. 

```calc( 1rem * pow( var(--wp--custom--type-scale-mobile), 2 ) )```

Fluid values are set with CSS clamp() function, where minimum value is calculated with mobile scale and maximum value with desktop scale. The preferred value is basically the maximum value that is converted to vw.

```clamp( <min-rem-value from mobile-scale>, <preferred-value>, <max-rem-value from desctop-scale> )```

Preferred value is calculated with the following function:

```(pow( var(--wp--custom--type-scale-desktop), 6 ) * 18) / 1920) * 100vw```

where the rem value is multiplied with the desktop root pixel value (18) and divided by the desktop size.

## Spacing

## Colors