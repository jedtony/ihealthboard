/**
 * Created by jed on 14/11/2018.
 */
/**
 * Created by jed on 14/11/2018.
 */
new Vue({
    el:'#root',
    data:  {
            messageTitle: "",
            multipleSelections: "",
            data: null,
            multiple: "true",
            assets:["Acne", "Anti-aging", "Allergies", "Alternative health",
                "Aromatherapy", "Beauty", "Kid's health", "Women's health",
                "Men's health", "Teen's Health ", "Birth control", "Dental care",
                "Mental health", "Diseases", "Drugs", "Drug abuse", "Skin care",
                "Hair care", "Environmental issues", "Fitness", "Exercise", "Personal training",
                "Nutrition", "Weight loss", "Weight gain", "Yoga", "Sleep", "Health care"]

    },
//  props: ['assets','title', 'multiple'],
    created() {
        console.log("selections: ",this.multipleSelections);
    }
});

