import TopBar from "./components/TopBar";
import { BrowserRouter, Route, Routes } from "react-router-dom";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route
          path="/"
          element={
            <>
              <TopBar />
            </>
          }
        />
        <Route path="/about" />
      </Routes>

      <TopBar />
    </div>
  );
}

export default App;
