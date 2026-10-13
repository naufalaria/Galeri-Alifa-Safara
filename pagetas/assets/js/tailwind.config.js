tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#C85A32', // Terracotta Rust
                    hover: '#B34E29',
                    light: '#FBF0EB',
                    dark: '#9E3C17',
                },
                secondary: {
                    DEFAULT: '#7A8466', // Sage Olive
                    hover: '#677154',
                    light: '#F2F4EE',
                },
                tertiary: {
                    DEFAULT: '#DDA77A', // Spun Jute / Amber
                    hover: '#C99366',
                    light: '#FBF4EC',
                },
                base: {
                    text: '#2C2420', // Espresso Roast
                    muted: '#6B5E55',
                    canvas: '#FAF6F0', // Warm Linen Canvas
                    card: '#F3EBE1', // Warm Oat Card
                    elevated: '#FFFFFF',
                    border: '#E5DACB',
                    borderLight: '#EFE6DB',
                }
            },
            fontFamily: {
                serif: ['"Playfair Display"', 'Georgia', 'serif'],
                sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            boxShadow: {
                'warm-sm': '0 2px 8px -2px rgba(44, 36, 32, 0.05)',
                'warm': '0 10px 25px -5px rgba(44, 36, 32, 0.08), 0 4px 10px -2px rgba(44, 36, 32, 0.04)',
                'warm-lg': '0 20px 35px -8px rgba(44, 36, 32, 0.12), 0 8px 16px -4px rgba(44, 36, 32, 0.05)',
            }
        }
    }
}
