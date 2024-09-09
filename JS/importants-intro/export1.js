//example
  /*
    <script type="module">
        import message from "./message.js";
        //modules with functions and vars acan be stored in any external file
        //2 types of exports (named, default)    
      <script>  
  */

  //named exports
  export const name = "Jiro";
  export const age = 21;
  //or all at once
  //export {name,age}; 

  //defaults exports can call once per file
  const message = () => {
    const content1 = "This is content 1";
    const content2 = "This is content 2";
    return content1 + " and " + content2;
  }
  export default message;