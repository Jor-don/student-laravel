import React, { useState } from "react";
import ReactDOM from "react-dom/client";

function HelloReact() {
  const [count, setCount] = useState(0);

  return (
    <div style={{ textAlign: "center", marginTop: "80px" }}>
      <h1>Hello from React 🎉</h1>
      <p>You’ve clicked {count} times.</p>
      <button
        onClick={() => setCount(count + 1)}
        style={{
          padding: "10px 20px",
          fontSize: "16px",
          backgroundColor: "#2563eb",
          color: "white",
          border: "none",
          borderRadius: "6px",
        }}
      >
        Click Me
      </button>
    </div>
  );
}

export default HelloReact;

// Mount it
if (document.getElementById("react-root")) {
  ReactDOM.createRoot(document.getElementById("react-root")).render(<HelloReact />);
}

