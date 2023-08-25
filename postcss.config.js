"use strict";

/*module.exports = {
    plugins: {
        "autoprefixer": {}
    }
}*/

"use strict";

module.exports = (ctx) => {
    return {
        plugins: {
            autoprefixer: {
                cascade: false,
            },
            rtlcss: {}
            // rtlcss: false,
        },
    };
};