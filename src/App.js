import logo from './logo.svg';
import './App.css';
import profile from './assets/calin.jpg'

function App() {
  return (
      <div className="App">
	  <h1>Hello there, I'm Calin 🙃</h1>
	  <div>
	      That's me -> <img src={profile} height="300px"/>
	  </div>
    </div>
  );
}

export default App;
