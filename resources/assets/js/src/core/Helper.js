export default class Helper{

    static isEmpty(val){

        if(Helper.isObject(val)){
            return Object.keys(val).length === 0;
        }

        return (
            val === undefined||
            val === null ||
            val.length === 0
        );
    }

    static isObject(val){
        return val instanceof Object && !Array.isArray(val);
    }

}
