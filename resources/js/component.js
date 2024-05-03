import "@melloware/coloris/dist/coloris.css";
import "../css/styles.css";
import Coloris from "@melloware/coloris";

export default function coloredInput({state, style, theme, themeMode, options}) {

    return {
        state,
        refresh: (value, forceValue = false) => {
            if (forceValue) {
                this.$refs.coloredInput.setAttribute('value', value);
            }
            this.$refs.coloredInput.dispatchEvent(new Event('input', {bubbles: true}));
        },
        init() {
            //watch any changes to state then refresh UI
            this.$watch('state', this.refresh);
            Coloris.init();
            /**
             * Pass along provided additional options for customization and set values for theme
             * @type HTMLElement
             */
            const colorisInstance = Coloris({
                themeMode,
                theme,
                el: this.$refs.coloredInput,
                defaultColor: this.state,
                onChange: color => this.state = color,
                ...options
            });

            let clrField = this.$refs.coloredInput.closest('.clr-field')
            if (clrField && style.length > 0) {
                clrField.parentElement.classList.add(style);
            }
            // force refresh to reflect initial value
            this.refresh(this.state, true);
        },
    }

}
